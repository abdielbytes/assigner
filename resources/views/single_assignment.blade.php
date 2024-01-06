<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $assignment->name }} - Assignment</title>
    <link rel="stylesheet" href="{{ mix('css/pdf.css') }}" type="text/css">

    {{--    <link rel="stylesheet" href="../css/styles.css">--}}
{{--    <link rel="stylesheet" href="{{ mix('pdf.css') }}" type="text/css">--}}
{{--    <link rel="stylesheet" href="{{ url('pdf.css') }}" type="text/css">--}}

</head>

<body>
<div class="body">
<section>

    <p class="head"> OUR CHRISTIAN LIFE AND MINISTRY MEETINGS ASSIGNMENT <p>
    <p class="name">Name: {{ $assignment->name }}</p>
    <p class="name">Assistant: {{ $assignment->assistant }}</p>
    <p class="name">Date: {{ $assignment->week }} </p>

    <div class="assignpart">
        <p class="title"> <strong>Assignment:</strong></p>
        <div class="assign">
            <div class="assignment-column">
                <p class="assignment-checkbox checked">Bible Reading</p>
                <p class="assignment-checkbox">Initial Call</p>

                <p class="assignment-checkbox">Return Visit</p>
            </div>
            <div class="assignment-column">
                <p class="assignment-checkbox">Bible Study</p>
                <p class="assignment-checkbox">Talk</p>
                <p class="assignment-checkbox">Other:</p>
            </div>

            <div class="assignment-column">

            </div>
        </div>
    </div>

    <p class="title">To be given in:</p>
    <div class="given">

        <div class="assignment-column">
            <p class="assignment-checkbox checked">Main Hall</p>
            <p class="assignment-checkbox">Auxilliary classroom 1</p>
            <p class="assignment-checkbox">Auxilliary classroom 2</p>
        </div>
        <div class="note">
            <p><strong>Note to Student:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga dolor commodi rerum, doloremque nostrum laboriosam, nihil, consectetur aspernatur numquam autem odit nesciunt sunt vero distinctio. Quis, quibusdam. Ea, illum repellendus. Fuga consequatur, dolor exercitationem ratione facere, excepturi vitae in numquam veniam inventore ducimus maxime assumenda quis odit magni repellat ad.</p>
        </div>
    </div>

</section>
</div>
</body>
</html>
