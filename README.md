# json-excel-converter - JSON to Excel Converter with Image Support

## Overview

DataConvert Pro is a powerful web application designed for developers and users who want to effortlessly convert JSON data into Excel format with added support for image integration. Whether you're a seasoned developer or a student, this tool streamlines the conversion process and enhances your data representation with visually appealing images.

## Key Features

- **Effortless Conversion:** Convert JSON to Excel seamlessly with just a few clicks.
- **Image Integration:** Include images in your Excel files for a richer data representation.
- **User-Friendly Interface:** Intuitive UI designed for easy navigation and a hassle-free user experience.
- **Customizable Output:** Tailor the Excel output to meet your specific requirements.
- **Local Development Friendly:** Easily configurable for local development environments.
- **Secure and Fast Processing:** Ensure the security of your data with fast and efficient processing.
- **Cross-Browser Compatibility:** Works seamlessly across different web browsers.

## Getting Started

### Prerequisites

- Web browser (Chrome, Firefox, Safari, etc.)
- Internet connection

### Prerequisites
- Python 3.x
- Pip (Python package installer)

### Installation

1. Clone the repository: `git clone https://github.com/ashishjatvji/json-excel-converter.git`
2. Navigate to the project directory: `cd json-excel-converter`
3. install all Require Packages
   
    ```bash
    pip install -r requirements.txt

5. Start Server
   
    ```bash
    python webapp.py

3. Open `https://localhost/<folder_path>/index.php` in your preferred web browser.

## Usage

1. Paste Your Json in TextString.
2. Click the "Submit" button.
3. Download your Excel file with images.

## Configuration

For local development, update URLs and settings in the configuration file: `actiop.php`.

```PHP
// actiop.php
<?php

// URL of the Flask API
$api_url = 'http://127.0.0.1:5000/upload';
