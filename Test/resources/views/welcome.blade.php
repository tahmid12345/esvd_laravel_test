<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<link rel="stylesheet" href="assets/style.css" />
<link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
/>

<body>
<!-- ----------------------------------------- container -------------------------------------------- -->

<div style="padding: 5px">
    <div class="form-group">
        <label for="exampleFormControlSelect1">ES Class</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option value="provisioning">Provisioning</option>
            <option value="regulating">Regulating</option>
            <option value="supporting">Supporting</option>
            <option value="cultural">Cultural</option>
        </select>
    </div>

    <!-- ------------------------------------------ items --------------------------------- -->

    <div class="provisioning_class">
        <!-- ------------------------- food ---------------------- -->
        <input type="radio" id="food" name="food" onclick="foodRadio()" /> Food
        <button
            type="button"
            class="btn btn-info btn-sm food_button_plus"
            id="food_button_plus"
            onclick="food_button_plus_click()"
        >
            +
        </button>

        <div class="food_button_extension" id="food_button_extension">
            <form action="{{ route('test') }}" method="post">
                {{ csrf_field() }}
                <div class="row" style="margin: 0; padding: 0" id="food_row">
                    <div class="col-md-3">
                        <div class="form-field" style="margin-top: 30px">
                            <label for="">SubES Name</label><br />
                            <input type="text" name="food[]" required/><br />

                            <label for="">SubES Quantity</label><br />
                            <input type="text" name="food[]"/><br required/>

                            <label for="">SubES Quantity Unit</label><br />
                            <input type="text" name="food[]" required/><br />

                            <div>
                                <label for="">SubES Value</label><br />
                                <input type="text" name="food[]" required/><br />
                            </div>

                            <label for="">SubES Value Unit</label><br />
                            <input type="text" name="food[]" required/><br />

                            <label for="">SubES Validation</label><br />
                            <input type="text" name="food[]" required/><br />
                        </div>
                    </div>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>

        <!-- ------------------------- food ---------------------- -->
    </div>

    <!-- --------------------------------------------------------------------- end -  items  -->
</div>

<!-- ------------------------------------------ container ------------------------------------------- -->
</body>


<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
></script>

<script src="assets/script.js"></script>
</html>
