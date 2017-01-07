# Installation

- [Requirements](#requirements)
- [Installation](#installation)


{#requirements}
## [](#requirements) Requirements
Sereno has a few requirements. Make sure your machine meets the following
requirements.

- PHP >= 7.0
- Node >= 0.12

{#installation}
## [](#installation) Installation
Sereno uses [Composer](https://getcomposer.com) to manage its dependencies. So,
before using Sereno make sure you have composer installed on your machine.

Install Sereno by issuing the Composer `create-project` command in your terminal:

    composer create-project --prefer-dist znck/sereno blog

#### Post Installation
Sereno uses [Gulp](#) to build resources. So, make sure you have Node installed
on your machine.

Fetch javascript dependencies with [NPM](#) or [Yarn](#):

    npm install

    # or
    yarn

#### Generate Website
Generate a static website by issuing following NPM or Yarn command:

    yarn run build

    # or
    npm run build

Your site is generated in `public` directory.

#### Development Server
Sereno includes a built in server to quickly preview your website while
developing. Launch development server by issuing following NPM or Yarn command:

    yarn start

    # or
    npm start


<br><br><br>
- - - - - - - - - -
[Edit this page on Github](https://github.com/znck/sereno.in/edit/master/docs/installation.md) [Directory Structure](@url('docs/directory-structure')){.float-xs-right}
