<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Lab</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="details">
        <div id="liveAlertPlaceholder"></div>
        <form class="row g-3" id="addForm">
            <div class="heading">PATIENT DETAILS</div>
            <div class="col-md-12">
                <label for="title" class="form-label">Title</label>
                <select id="title" class="form-select">
                    <option value="">Choose...</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Smt.">Smt.</option>
                    <option value="Kumari">Kumari</option>
                    <option value="Shri.">Shri.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Master">Master</option>
                    <option value="Mohd.">Mohd.</option>
                    <option value="Baby">Baby</option>
                    <option value="Baby_of">Baby of</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Selvi">Selvi</option>
                    <option value="Sk.">Sk.</option>
                    <option value="PROF">PROF</option>
                    <option value="Dr.">Dr.</option>
                </select>
            </div>
            <div class="col-md-6">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="fname">
            </div>
            <div class="col-md-6">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lname">
            </div>
            <div class="col-md-6">
                <label for="aadhar" class="form-label">Aadhar Number (12 Digits)</label>
                <input type="number" class="form-control" id="aadhar">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-12">
                <label for="basic-url12" class="form-label">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Male">
                    <label class="form-check-label" for="flexRadioDefault1">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked value="Female">
                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                </div>
            </div>
            <div class="col-md-6">
                <label for="basic-url" class="form-label">Mobile Number</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">+91</span>
                    <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="col-md-6">
                <label for="basic-url2" class="form-label">Age</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id="basic-url2" aria-describedby="basic-addon3">
                    <span class="input-group-text" id="basic-addon3">Years</span>
                    <input type="number" class="form-control" id="basic-url3" aria-describedby="basic-addon3">
                    <span class="input-group-text" id="basic-addon3">Months</span>
                    <input type="number" class="form-control" id="basic-url4" aria-describedby="basic-addon3">
                    <span class="input-group-text" id="basic-addon3">Days</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea5" class="form-label">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Online Report Requested</label>
                </div>
            </div>
            <div class="heading">CASE DETAILS</div>
            <div class="col-md-7">
                <label for="refer" class="form-label">Referred By.</label>
                <select id="refer" class="form-select">
                    <option selected>Choose...</option>
                    <option value="ABC">ABC</option>
                    <option value="XYZ">XYZ</option>
                    <option value="MNOP">MNOP</option>
                    <option value="PQRS">PQRS</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="centre" class="form-label">Collection Centre</label>
                <select id="centre" class="form-select">
                    <option selected>Choose...</option>
                    <option value="ABC">ABC</option>
                    <option value="XYZ">XYZ</option>
                    <option value="MNOP">MNOP</option>
                    <option value="PQRS">PQRS</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="agent" class="form-label">Sample Collection Agent</label>
                <select id="agent" class="form-select">
                    <option selected>Choose...</option>
                    <option value="ABC">ABC</option>
                    <option value="XYZ">XYZ</option>
                    <option value="MNOP">MNOP</option>
                    <option value="PQRS">PQRS</option>
                </select>
            </div>
            <div class="heading">PAYMENT DETAILS</div>
            <div class="col-md-7">
                <label for="total" class="form-label">Total Amount:</label>
                <input type="number" class="form-control" id="total">
              </div>
            <div class="col-md-7">
                <label for="discount" class="form-label">Discount:</label>
                <input type="number" class="form-control" id="discount">
            </div>
            <div class="col-md-7">
                <label for="paid" class="form-label">Amount Paid:</label>
                <input type="number" class="form-control" id="paid">
              </div>
            <div class="col-md-7">
                <label for="balance" class="form-label">Balance Amount:</label>
                <input type="number" class="form-control" id="balance">
            </div>
            <div class="col-md-7">
                <label for="mode" class="form-label">Mode Of Payment</label>
                <select id="mode" class="form-select">
                    <option selected>Choose...</option>
                    <option value="cash">Cash</option>
                    <option value="card">Credit/Debit Card</option>
                    <option value="check">Check</option>
                    <option value="upi">UPI</option>
                    <option value="paytm">Paytm</option>
                </select>
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-primary" id="save-btn">Create & Save</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>