<x-layout>
    <x-sidebar />
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                margin: 0;
                padding: 0;
            }

            .card {
                max-width: 500px;
                margin: 20px auto; 
                padding: 30px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .form-group {
                display: flex;
                flex-direction: column;
                margin-bottom: 20px;
            }

            label {
                font-weight: bold;
            }

            input {
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
                margin-top: 5px;
            }

            button {
                background-color: #007bff;
                color: #fff;
                padding: 12px 18px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }

            button.import {
                background-color: #28a745;
            }

            /* Responsive adjustments */
            @media (max-width: 600px) {
                .card {
                    padding: 20px;
                }
                input {
                    padding: 8px;
                }
                button {
                    padding: 10px 14px;
                }
            }
        </style>
    </head>

    <body>
        <div class="card">
            <h2 style="text-align: center; margin-top: 0;"><strong>Registration Form</strong></h2>
            <form>
                <div style="text-align: right;">
                    <button type="button" class="import">Import</button>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="student-number">Student Number:</label>
                    <input type="text" id="student-number" name="student-number" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <div style="text-align: center;">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </body>

    </html>
</x-layout>
