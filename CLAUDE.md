# Project Context

## Recent Work: Livewire PRs Document

Created `livewire-prs.md` in the root directory - a markdown table of all open PRs from the livewire/livewire GitHub repository.

### Table Structure
| Column | Description |
|--------|-------------|
| PR# | Pull request number |
| Link | PR title as markdown link to the PR URL |
| Date | Date PR was opened (YYYY-MM-DD) |
| Type | Category: Bug Fix, Feature, Docs, Enhancement, Security, Chore, Test |
| Summary | 1-3 sentence description of the PR |
| Recommendation | Empty column for user notes |

### Notes
- Contains 56 open PRs (as of 2025-01-08)
- PRs range from December 2025 back to March 2024
- Avoided backticks in content as they broke Notion's markdown table import
- Data fetched via `gh pr list --repo livewire/livewire`

### If Updating the Document
To refresh the PR list:
```bash
gh pr list --repo livewire/livewire --state open --limit 100 --json number,title,createdAt,url,body
```
