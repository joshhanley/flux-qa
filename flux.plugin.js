import { spawn } from 'child_process'
import path from 'path'

export default function watchFluxBuild() {
    return {
        name: 'watch-flux-build',
        configureServer(server) {
            let packageFolder = path.resolve(__dirname, 'vendor/livewire/flux-pro')
            let packageJsFolder = path.resolve(packageFolder, 'js')

            // Watch for file changes in the package JS folder
            server.watcher.add(packageJsFolder)

            server.watcher.on('all', (event, file) => {
                if (!file.startsWith(packageJsFolder)) return // Only process js folder
                console.log(`\x1b[32mFile changed: ${file}. Running build.js...\x1b[0m`)

                let buildFile = path.resolve(packageFolder, 'build.js')

                // Run build.js on changes
                const buildProcess = spawn('node', [buildFile], {
                    stdio: 'inherit',
                    shell: true,
                    cwd: packageFolder,
                })

                buildProcess.on('close', (code) => {
                    if (code === 0) {
                        console.log('\x1b[32mBuild.js completed successfully.\x1b[0m')
                        
                        // Trigger Vite's hot reload
                        server.ws.send({
                            type: 'full-reload',
                            path: '*',
                        })

                        console.log('\x1b[32mVite hot reload triggered.\x1b[0m')
                    } else {
                        console.error('\x1b[31mBuild.js failed.\x1b[0m')
                    }
                })
            })
        },
    }
}
