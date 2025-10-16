# Git Commit Instructions

## Purpose

This document defines the standardized commit message format for this project, following the Conventional Commits specification to enable automated versioning, changelog generation, and clear project history.

## Commit Message Structure

Every commit message must follow this format:

```
<type>(<scope>): <description>

<body>
```

### Components

**Type** (required): Defines the nature of the change
**Scope** (optional): Specifies the affected component or module
**Description** (required): Brief summary in imperative mood (50 characters or less)
**Body** (required): Detailed explanation of what and why, not how

## Commit Types

Use these standardized types for all commits:

**feat**: A new feature or enhancement for the user
- Triggers MINOR version bump in semantic versioning
- Example: `feat(auth): add OAuth2 social login support`

**fix**: A bug fix that resolves an issue
- Triggers PATCH version bump in semantic versioning
- Example: `fix(api): resolve timeout error in user data endpoint`

**docs**: Documentation changes only
- No code changes, only updates to README, comments, or documentation files
- Example: `docs(api): update authentication endpoint examples`

**style**: Code style changes that don't affect functionality
- Formatting, whitespace, semicolons, linting fixes
- Example: `style(components): format code according to ESLint rules`

**refactor**: Code restructuring without changing functionality
- Neither fixes bugs nor adds features
- Example: `refactor(database): optimize query performance in user service`

**perf**: Performance improvements
- Changes that improve code efficiency or speed
- Example: `perf(images): implement lazy loading for gallery component`

**test**: Adding or updating tests
- Includes unit tests, integration tests, or test utilities
- Example: `test(auth): add test coverage for password validation`

**build**: Changes to build system or dependencies
- Updates to package.json, build scripts, or tooling configuration
- Example: `build(deps): upgrade React to version 18.3.0`

**ci**: Changes to CI/CD configuration
- Updates to GitHub Actions, CircleCI, Jenkins, or deployment pipelines
- Example: `ci(github): add automated security scanning workflow`

**chore**: Maintenance tasks that don't modify source or test files
- Updating grunt tasks, package manager configs, routine updates
- Example: `chore(release): prepare version 2.1.0 release`

**revert**: Reverts a previous commit
- Include the SHA of the reverted commit in the body
- Example: `revert: revert feat(auth): add OAuth2 support`

## Scope Guidelines

Scope indicates which part of the codebase is affected. Choose clear, recognizable scope names:

- Use lowercase for consistency
- Keep scopes short and descriptive: `auth`, `api`, `ui`, `database`, `config`
- Align scopes with your project's module structure
- Be consistent across commits

## Description Best Practices

The description is the most visible part of your commit message. Follow these rules:

- **Use imperative mood**: "add feature" not "added feature" or "adds feature"
- **No capitalization**: Start with lowercase letter
- **No period at the end**: Keep it clean and concise
- **Maximum 50 characters**: Be brief but descriptive
- **Be specific**: "fix login validation bug" not "fix bug"

Good examples:
- `feat(cart): implement product quantity selector`
- `fix(auth): prevent duplicate user registration`
- `docs(readme): add Docker setup instructions`

Bad examples:
- `feat: Added new stuff` (capitalized, vague, past tense)
- `fixed the problem with the authentication system that was causing errors` (too long)
- `update` (not descriptive enough)

## Body Guidelines

The body is required for every commit and should provide context:

- Separate body from description with a blank line
- Wrap lines at 72 characters for readability
- Explain the **what** and **why**, not the **how**
- Use multiple paragraphs if needed
- Reference issues or tickets when relevant

Example:
```
feat(api): add rate limiting to public endpoints

Implement Redis-based rate limiting to prevent API abuse and ensure
fair usage across all clients. Limits are set to 100 requests per
minute for authenticated users and 20 requests per minute for
unauthenticated requests.

This change addresses recent infrastructure concerns about API
overuse patterns observed in production monitoring.
```

## Breaking Changes

Breaking changes must be clearly indicated and documented in the body:

Add `!` after the type/scope and explain the breaking change in the body:
```
feat(api)!: change authentication token structure

Authentication tokens now use JWT format instead of custom format.
All clients must update their authentication logic to support the
new token structure. Migration guide available in docs/auth-migration.md
```

Another example:
```
refactor(database)!: restructure user data model

User schema has been updated with new required fields. Migration is
required before deploying this version. Run `npm run migrate:users`
to update existing data. Backup your database before migration.
```

Breaking changes trigger MAJOR version bumps in semantic versioning.

## Common Patterns and Examples

### Feature development
```
feat(dashboard): add revenue analytics chart

Implement interactive revenue chart using Chart.js with filtering
by date range and product category. Data is fetched from the new
analytics API endpoint.
```

### Bug fix with issue reference
```
fix(checkout): resolve payment processing timeout

Increase payment gateway timeout from 5s to 30s to prevent
transaction failures during peak traffic periods. This resolves
the intermittent payment failures reported by users during
high-traffic hours.
```

### Documentation update
```
docs(contributing): add pull request template guidelines

Clarify PR description requirements and code review process for
new contributors. Include examples of good PR titles and
descriptions to help maintain consistency across the project.
```

### Multiple related changes
```
feat(search): implement full-text search functionality

Add Elasticsearch integration for product search with support for
fuzzy matching, typo tolerance, real-time search suggestions, and
filtering by category, price range, and availability.

Performance tests show 10x improvement over previous SQL-based
search with response times under 100ms for 95% of queries.
```

### Revert example
```
revert: feat(auth): add biometric authentication

This reverts commit 3f8a9b2c1d5e6f7a8b9c0d1e2f3a4b5c6d7e8f9a.

Reverted due to compatibility issues with Android 12 devices
causing app crashes on login. The feature will be re-implemented
after fixing the underlying native module dependency.
```

## Validation Rules

All commits must pass these validation checks:

- Type must be one of the approved types listed above
- Description must be present and under 50 characters
- Description must use lowercase and imperative mood
- Description must not end with punctuation
- Body must be present and separated from description by blank line
- Body must provide meaningful context about the change
- Breaking changes must be clearly marked with `!`
- Lines should wrap at 72 characters (except URLs)

## Semantic Versioning Impact

Commit types automatically determine version bumps:

- **MAJOR** (x.0.0): Commits with `BREAKING CHANGE` or `!`
- **MINOR** (0.x.0): Commits with type `feat`
- **PATCH** (0.0.x): Commits with type `fix`, `perf`
- **No bump**: `docs`, `style`, `refactor`, `test`, `build`, `ci`, `chore`

## Tips for Success

**Do**:
- Write commits as if explaining changes to a future developer
- Make commits atomic and focused on a single concern
- Link commits to issue trackers for traceability
- Review commit history before pushing
- Use present tense imperative mood consistently

**Don't**:
- Commit commented-out code or debug statements
- Bundle unrelated changes in a single commit
- Use vague descriptions like "update files" or "fix stuff"
- Write a body that just repeats the description
- Skip meaningful context in the commit body
