# API Documentation for Extracting Face from Document Image

## Endpoint

- **URL**: `http://91.203.134.203:8080/extract`
- **Method**: `POST`
- **Parameter**:
  - `Image` [File]: The image file containing the document with the face to be extracted.
- **Response Type**: JSON

## Success Response

```json
{
    "code": 200,
    "filename": "temp_name-extracted_face.jpg",
    "message": "Face Extracted Successfully",
    "output_path": "static/extracted_faces/temp_name-extracted_face.jpg",
    "status": "success"
}
```

## Error Response
```json
{
    "code": 400,
    "message": "No Face Found in the Image",
    "output_path": null,
    "status": "error"
}

```
---
---
---

## To Download File
- **URL**: `http://91.203.134.203:8080/download?filename={filename}`
- **Method**: `GET`
- **Parameter**:
  - `Image` : The name of the extracted face file you want to download.
- **Response Type**: File Download

This format should cover everything in a single markdown file. Let me know if you need any further adjustments!
