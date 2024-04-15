# OpenAI Text-to-Speech Interface

This project provides a simple web interface to generate speech from text using OpenAI's Whisper model. It consists of a client-side HTML form to capture user input and a server-side PHP script to handle the OpenAI API interaction securely.

## Features

- **Web Form**: A simple HTML/CSS interface allowing users to input text and initiate speech generation.
- **Security**: The OpenAI API key is securely managed server-side, avoiding exposure in client-side code.
- **Ease of Use**: Users receive the generated speech as an audio file, which can be played or downloaded directly.

## Components

### HTML/CSS

- `index.html`: Contains the user interface with a text field and a button to submit text.
- Basic CSS styling for layout and design.

### PHP (`tts.php`)

- Checks for POST requests.
- Reads the OpenAI API key from a predefined server-side variable.
- Retrieves the text from the POST parameter.
- Prepares and sends a POST request to the OpenAI API specifying the model, input text, and desired voice.
- Handles the API response, sending the audio file back for download if successful, or displaying an error message otherwise.

### JavaScript

- Includes a function `generateSpeech()` that triggers on button click.
- Sends the user's text to `tts.php` via POST.
- Opens the received audio file in a new tab upon successful response.

## Setup

1. Clone the repository:
2. 2. Place your OpenAI API key in the `tts.php` script.
3. Host the files on a PHP-enabled server.

## Usage

Open `index.html` in a web browser, enter the text you wish to convert to speech, and click the generate button. The speech will be played back to you or provided as a downloadable file.

## Security Note

This application manages sensitive data (API key) server-side, enhancing security and preventing potential misuse if the client-side code is compromised.

## Contributing

Contributions to this project are welcome. Please fork the repository and submit a pull request with your proposed changes.

## License

This project is open source under the [MIT License](LICENSE.md).


