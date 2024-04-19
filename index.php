<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDP front page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form action="pdf/generate.php" method="POST" style="margin: 10%;">
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Roll</label>
            <input type="text" name="roll" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <!-- <div class="form-group">
            <label for="formGroupExampleInput2">Date</label>
            <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div> -->
        <div class="form-group">
            <label for="formGroupExampleInput2">Subject</label>
            <input type="text" name="subject" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Semester</label>
            <select class="form-select" aria-label="Default select example" name="semester">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6th">6th</option>

            </select>
        </div>
        <button type="submit" name="create">Create</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>