# Librarium (SQLite)

A web-application for managing your Book, DVD, CD, Game and/or Magazine collection (or whatever you choose to collect, really)

This is a preview version of Librarium, being developed to use SQLite to store the user's collection and cover art, with a separate database for each user, whilst still using MySQL to handle the management of the users themselves.

This preview is located at https://librarium.lga.nz/

This version is nearly feature-par with the current version, and will replace it soon. In the meantime, only bug fixes will be made to the main website.

Most server scripts are now returning JSON, which means development on the native mobile version can begin.

Improvements being looked into so far are:

- A new login system
- Improved item management
- Improved cover art storage
- Improved overall design
- Improved fluidity on mobile
- Import from other library applications

This will be developed mostly from scratch - meaning it will take time for it to get on par with the existing website.

## Browser Compatibility

As we are using CSS grids, you need a relatively recent browser, but this will change once a solution for older browsers has been implemented. Below are the requirements for running this version, currently:

### Desktop Browsers

| Chrome | Firefox | Safari | Edge | IE |
| --- | --- | --- | --- | --- | --- |
| 57 | 52 | 10.1 | 16 | N/A |

### Mobile Browsers

| Chrome | Firefox | Safari | Edge | Samsung |
| --- | --- | --- | --- | --- |
| 57 | 52 | 10.3 | 16 | 6.0 |

Note that Librarium. has only really been tested fully on Desktop Chrome 66+ and iOS Safari 11+. More will be tested once the UI has settled
