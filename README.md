# IP Tracking System

## Overview

This project demonstrates a simple IP tracking system using PHP and HTML. When a user visits the `display.html` page, their IP address is logged in a text file (`ip_log.txt`) through a request made to a PHP script (`track.php`). This system is useful for basic tracking purposes and provides a way to see how many times a page has been accessed from different IP addresses.

## Files

- **display.html**: The HTML file that displays a message and includes an image to trigger the IP logging.
- **track.php**: The PHP script that logs the IP address and serves the tracking image.
- **tracking_image.png**: A transparent PNG image used to trigger the PHP script.
- **ip_log.txt**: The file where IP addresses are logged.

## How It Works

1. **Request Handling**:
   - The `display.html` page contains an `<img>` element with the source set to `track.php`. When the page is loaded, this triggers a request to `track.php`.

2. **IP Logging**:
   - When `track.php` is requested, it performs the following actions:
     - Retrieves the client's IP address using `$_SERVER['REMOTE_ADDR']`.
     - Records the current date and time.
     - Appends the IP address and timestamp to the `ip_log.txt` file.
     - Sets the content type to `image/png` and serves the `tracking_image.png` file to the client.

3. **Displaying the Image**:
   - The image `tracking_image.png` is displayed on the `display.html` page. This image can be any transparent PNG as it serves only to trigger the PHP script.

## Setup

1. **Download the Project**:
   - Clone or download the project files to your local server or hosting environment.

2. **Place Files in the Web Directory**:
   - Ensure the following files are in the same directory on your web server:
     - `display.html`
     - `track.php`
     - `tracking_image.png`
     - `ip_log.txt` (this file can be created manually or it will be created automatically when the script runs)

3. **File Permissions**:
   - Ensure that `ip_log.txt` is writable by the PHP script. You might need to set the appropriate file permissions (e.g., `chmod 666 ip_log.txt` on Unix-based systems).

## Viewing Tracked IPs

1. **Access the Display Page**:
   - Open `display.html` in a web browser. Each time the page is loaded, it triggers a request to `track.php`, logging the IP address.

2. **Check the Log File**:
   - Open `ip_log.txt` to view the logged IP addresses and timestamps. Each entry will be in the format: `YYYY-MM-DD HH:MM:SS - IP_ADDRESS`.

## Example

1. **Visit `display.html`**:
   - When you visit this page, the browser requests `track.php` which logs your IP address.

2. **Log Entry**:
   - After visiting the page, you can check `ip_log.txt` for an entry like:
     ```
     2024-08-08 14:30:00 - 192.168.1.1
     ```

## Troubleshooting

- **Image Not Displaying**:
  - Ensure `tracking_image.png` exists and is accessible by the PHP script.

- **File Permissions**:
  - Verify that `ip_log.txt` has the correct permissions for writing.

- **No Entries in Log**:
  - Ensure that `track.php` is correctly handling requests and the `file_put_contents` function has the proper permissions.
