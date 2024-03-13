# SwiftDental

This repository contains an application that converts numbers (integers and Roman Numerals) into their respective word representations.

## Installation

To run this repository, you will need to ensure that you have PHP 8 and Composer installed. Your PHP installation must also be configured to allow the use of `NumberFormatter`. Follow the steps below:

1. Enable the `intl` extension in your PHP ini file. Locate the following line in your PHP ini file:
- `;extension=intl`

Remove the ';' at the beginning of the line:
- `extension=intl`

Save the changes.

2. Clone the repository to your local machine:
- `git clone https://github.com/greenrae94/SwiftDental.git`


3. Navigate into the project directory:
- `cd your/file/path/here`

4. Install the Composer dependencies:
- `composer install`

5. Create a copy of the `.env.example` file and rename it to `.env`:
- `cp .env.example .env`


6. Once installed, start the Laravel development server:
- `php artisan serve`


7. Access the application in your web browser. The default access point should be:
- http://localhost:8000/ or http://127.0.0.1:8000/ (both are the same address).

## Usage

1. Open your web browser and navigate to the URL.
2. Enter a number as an integer or a Roman Numeral into the input field.
3. Click the 'Convert' button to see the word representation of the number.
4. If the input is invalid, you will be redirected back to the input form with an error message.
