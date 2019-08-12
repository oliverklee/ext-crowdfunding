# Change log

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](https://semver.org/).

## x.y.z

### Added
- Add PHP_CodeSniffer to the Travis CI build (#17)
- Auto-release to the TER (#8)
- Composer script for PHP linting

### Changed
- Change from GPL V3+ to GPL V2+ (#13)

### Deprecated

### Removed
- Stop building with the lowest Composer dependencies (#18)
- Drop the TYPO3 package repository from composer.json (#16)

### Fixed
- Drop an obsolete "replace" entry from composer.json (#15)
- Explicitly require MySQL in the Travis CI configuration (#14)
- Explicitly provide the extension name in the composer.json (#12)
