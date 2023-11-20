<html>
    <head></head>
    <body>
        <h1>Dear Admin</h1>
        <h4>Kindly find new question details :</h4>
        <p>Market  : {{$market}}</p>
        @if($customcategory!='')
        <p>Custom Category  : {{$customcategory}}</p>
        @endif
        @if($industry!='')
        <p>Industry  : {{$industry}}</p>
        @endif
        <p>Question Type  : {{$questiontype}}</p>
        <p>Question Heading  : {{$questiontag}}</p>
        <p>Question Reference : {{$questionref}}</p>
        <p>Thanks,</p>
        <p>TPS Team</p>
    </body>
 </html>