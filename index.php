<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Json To  Excel Converter</title>
</head>
<body data-bs-theme="dark">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Json To  Excel Converter </h1>
            </div>
        </div>

        <form id="myform" action="action.php" method="POSt">
            <div class="mb-3">
                <label for="filename">FIle Name</label>
                <input type="text" class="form-control" name="filename" id="filename" placeholder="Enter Custom File Name for Export">
            </div>

            <div class="mb-3">
                <label for="jsondata" class="form-label"> 
                    Enter Json to Creaete Excel File <span class="text-danger">*</span>
                </label>
                <textarea class="form-control" name="jsondata" id="jsondata" cols="30" rows="10" placeholder="Enter Your Json Data to Create Image.."></textarea>
                <small>Use <span class="text-danger">image</span> as Key/index Value For Showing Images on Excel... </small>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Create Excel</button>
                <button type="button" class="btn samplebutton btn-outline-danger">Sample Data</button>
            </div>
        </form>

    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".samplebutton").click(function(e){
                fetch("sample.json")
                .then((res) => res.text())
                .then((text) => {
                    // do something with "text"
                    $("#jsondata").val(text)
                })
                .catch((e) => console.error(e));
            });
        });
    </script>


</body>
</html>
