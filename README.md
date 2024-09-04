# Flux QA repo

## Installation

- Copy `.env.example` to `.env`
- Change Flux path in `composer.json`
- Run `composer update livewire/flux`
- Run `php artisan key:generate`
- Run `php artisan migrate:fresh --seed`
- Run `npm ci`
- Run `npm run dev`

## Review
- Browse to `/`
- See list of components
