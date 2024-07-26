<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        @include('admin.css') 
        
        <style>
            body, html {
                margin: 0;
                padding: 0;
                height: 100%;
            }

            .background-container {
                background-image: url('{{ asset('image/background.jpg') }}'); /* Replace with your background image URL */
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
            }

            .flex-container {
                display: flex;
                flex-direction: column;
                gap: 20px; /* Adjust spacing between boxes */
                width: 100%;
                max-width: 800px; /* Adjust max-width as needed */
                margin: 20px; /* Adjust margin for spacing around the container */
                box-sizing: border-box; /* Include padding and border in the element's total width and height */
            }

            .guideline-box {
                background: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                flex: 1;
                min-width: 300px; /* Adjust min-width as needed */
            }

            .guideline-box h2 {
                margin-top: 0;
            }

            .guideline-box p {
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        @include('admin.arrange')
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-------------partial------------->
        @include('admin.navbar')
        <!-------------partial------------->

        <div class="background-container">
            <div class="flex-container">
                <div class="guideline-box">
                    <h2>Guideline 1</h2>
                    <p>Make sure to read all questions carefully before answering.</p>
                </div>
                <div class="guideline-box">
                    <h2>Guideline 2</h2>
                    <p>Answer the questions you know first, then return to the harder ones.</p>
                </div>
                <!-- Add more guideline boxes here if needed -->
            </div>
        </div>

        @include('admin.script')
        <!-- End custom js for this page -->
    </body>
    </html>
</x-app-layout>
