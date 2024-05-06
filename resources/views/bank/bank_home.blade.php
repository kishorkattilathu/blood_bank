@include('bank/layout/header');

<head>
    <title>My Profile</title>
    <style type="text/css">
        body
        {
            background-color: red;
        }
        
        h2
        {
            color: white;
            margin-top: 30px;
            padding-top: 10px;
        }
        label,a
        {
            color: white;
        }
        
        #button
        {
            background-color: lightgreen;
            width: 80px;
        }
        input
        {
            padding-left: 10px;
            height: 30px;
        }

    </style>
</head>
<body>
    <center>
            <div style="border-style: solid;margin-left: 500px;
            margin-right: 500px;
            height: 1100px;
            background-color: red;
            padding-top: 10px;
            border-color: yellow;
            margin-top:10px;
            margin-bottom: 10px">

                <form method="post" action="{{url('/bank_profile_update')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h2>My Profile</h2><br>
                    <label id="name">Your Name:</label><br>
                    <input type="text" name="name" value="{{$data->bank_name}}" ><br><br>

                    <label id="">Your Email:</label><br>
                    <input type="email" readonly="" name="email" value="{{$data->bank_email}}" ><br><br>

                    <label id="">Your Phone:</label><br>
                    <input type="phone" name="phone" value="{{$data->bank_phone}}" ><br><br>

                    <label id="">Your Address:</label><br>
                    <input type="text" name="address" value="{{$data->bank_address}}" ><br><br>

                   

                    <label id="pass">Your Password:</label><br>
                    <input type="text" name="pass" value="{{$data->bank_password}}" ><br><br>

                    <label id="pass">Old Bank Image</label><br>
                    <img style="height: 100px;width:100px;" src="{{'Admin/bank_image/'.$data->bank_image}}"><br><br> 

                    <label id="pass">Old Documents</label><br>
                    <img style="height: 100px;width:100px;" src="{{'Admin/documents/'.$data->documents}}"><br><br>

                    <label>New Bank Image</label><br>
                    <input type="file" name="bank_image"><br><br>

                    <label>New Documents</label><br>
                    <input type="file" name="documents"><br><br>

                    <button id='button' type="submit">Update</button><br><br>
                    <!-- <a href="{{url('/admin_login')}}">Already Register..?</a><br><br>
                    <a href="{{url('/blood_bank')}}">Home</a> -->

                </form>
            </div>

    </center>


@include('bank/layout/footer');