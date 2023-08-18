# Contact Form Implementation

This repository contains code to implement a simple contact form with form validation using PHP and storing form submissions in a MySQL database.

## Features

- HTML form with fields for Full Name, Phone Number, Email, Subject, and Message.
- PHP validation to ensure all fields are filled correctly and valid.
- MySQL database integration to store form submissions, IP address, and timestamp.
- Email notification to the site owner upon successful form submission.

## Usage

1. Clone the repository to your web server's root directory:


2. Create a MySQL database and table:

- Create a database named `contact_form_db`.
- Create a table named `contact_form` with the following columns:
  - `id` (auto-increment primary key)
  - `fullname` (varchar)
  - `phone` (varchar)
  - `email` (varchar)
  - `subject` (varchar)
  - `message` (text)
  - `ip_address` (varchar)
  - `timestamp` (datetime)

3. Update the database connection details in `process_form.php`:

- Open the `process_form.php` file.
- Update the `$servername`, `$username`, `$password`, and `$dbname` variables with your database credentials.

4. Implement email notification:

- Modify the `process_form.php` file to include code that sends an email notification to the site owner. You can use the `mail()` function or a third-party library like PHPMailer.

5. Ensure proper permissions:

- Make sure that your web server has write permissions to the directory where the repository is cloned, so it can write log files and possibly attachments for emails.

6. Access the form:

- Open a web browser and navigate to `http://your-domain/contact-form/index.html` to access the contact form.

## Security Considerations

- Implement proper input validation and sanitization to prevent SQL injection and other security vulnerabilities.
- Protect sensitive information such as database credentials by using environment variables.
- Use SSL to encrypt data transmitted between the user's browser and your server.

## Credits

This project was created by [Sristi garge]. Feel free to reach out to me at [your@email.com] for any questions or suggestions.

