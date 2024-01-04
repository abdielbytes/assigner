

{{--    @foreach($assignments as $assignment)--}}
{{--        <div>--}}
{{--            <h2>{{ $assignment->name }}</h2>--}}
{{--            <p>Assistant: {{ $assignment->assistant }}</p>--}}
{{--            <p>Assignment: {{ $assignment->assignment }}</p>--}}
{{--            <p>Week: {{ $assignment->week }}</p>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--    @endforeach--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $assignment->name }} - Assignment</title>
{{--    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">--}}
{{--    watch this asset thing. Introduced a new bug--}}
{{--    <link href="{{ asset('/css/components.css') }}" rel="stylesheet">--}}
{{----}}
</head>
<body>

{{--<style>--}}
{{--    :root {--}}
{{--        --item-spacing: 50px; /* Set the variable for item spacing */--}}
{{--    }--}}

{{--    body {--}}
{{--        margin: 0;--}}
{{--        padding: 0;--}}
{{--        box-sizing: border-box;--}}
{{--        font-family: Arial, sans-serif;--}}
{{--    }--}}

{{--    .body {--}}
{{--        /* width: 100%; */--}}
{{--        display: flex;--}}
{{--        justify-content: center; /* Center the content horizontally */--}}
{{--        width: 21cm;--}}
{{--        height: 29.7cm;--}}
{{--        margin: 2cm; /* Set margins for A4 paper */--}}
{{--        padding: 0; /* Remove padding to ensure accurate dimensions */--}}
{{--        box-sizing: border-box; /* Include padding and border in the element's total width and height */--}}
{{--        border: 1px solid #000; /* Add a border around the body */--}}
{{--        display: flex;--}}
{{--        flex-wrap: wrap; /* Allow items to wrap to the next row */--}}
{{--    }--}}

{{--    .name{--}}
{{--        font-size: 15px;--}}
{{--        font-weight: bold;--}}
{{--        line-height: 0.4;--}}
{{--        letter-spacing: 0.5px;--}}
{{--        word-spacing: 4px;--}}
{{--    }--}}
{{--    h5{--}}
{{--        font-weight: bolder;--}}
{{--    }--}}
{{--    .head{--}}
{{--        font-size: 15px;--}}
{{--        font-weight: bolder;--}}
{{--        text-align: center;--}}
{{--    }--}}
{{--    .title{--}}
{{--        font-size: 12px;--}}
{{--        font-weight: bold;--}}


{{--    }--}}
{{--    .assignpart{--}}
{{--        margin-top: 25px;--}}
{{--    }--}}
{{--    /* Add any additional styling for your content here */--}}
{{--    section {--}}
{{--        width: 8cm;--}}
{{--        justify-content: center;--}}
{{--        align-items: center;--}}
{{--        margin: 10px; /* Add spacing between sections */--}}
{{--        box-sizing: border-box; /* Include padding and border in the element's total width and height */--}}
{{--        border: 1px solid #000; /* Add a border around each section */--}}
{{--        height: 11cm; /* Set a fixed height for the sections */--}}
{{--        overflow: hidden; /* Hide overflow content */--}}
{{--        font-size: 10px; /* Adjusted font size */--}}
{{--    }--}}

{{--    .assign {--}}
{{--        display: flex;--}}
{{--        flex-wrap: wrap;--}}
{{--        justify-content: space-between;--}}
{{--        width: 100%;--}}
{{--        margin-top: -10px;--}}
{{--        margin-bottom: 4px;--}}
{{--        /* width: 100%; Occupy full width of the .assign container */--}}
{{--    }--}}

{{--    .given {--}}
{{--        display: flex;--}}
{{--        flex-direction: column;--}}
{{--        height: 100%;--}}
{{--        margin-top: -10px;--}}

{{--    }--}}

{{--    .note {--}}
{{--        width: 100%; /* Occupy full width of the .note container */--}}
{{--        display: flex;--}}
{{--        flex-wrap: wrap; /* Allow items to wrap to the next row */--}}
{{--        font-size: 7px;--}}
{{--    }--}}

{{--    p {--}}
{{--        font-family: Arial, sans-serif;--}}
{{--        line-height: 1.2; /* Adjusted line height */--}}
{{--        margin-bottom: 5px; /* Adjusted margin */--}}
{{--        width: 100%; /* Make paragraphs occupy full width */--}}
{{--    }--}}

{{--    .assignment-checkbox {--}}
{{--        margin-right: var(--item-spacing);--}}
{{--        position: relative;--}}
{{--        padding-left: 15px; /* Adjusted padding */--}}
{{--        cursor: pointer;--}}
{{--        display: block;--}}
{{--    }--}}

{{--    .assignment-checkbox::before {--}}
{{--        content: '';--}}
{{--        position: absolute;--}}
{{--        left: 0;--}}
{{--        top: 2px;--}}
{{--        width: 12px; /* Adjusted width */--}}
{{--        height: 12px; /* Adjusted height */--}}
{{--        border: 1px solid #000;--}}
{{--        background-color: #fff;--}}
{{--    }--}}

{{--    .assignment-checkbox.checked::before {--}}
{{--        background-color: #000;--}}
{{--    }--}}

{{--</style>--}}


{{--<p>Name: {{ $assignment->name }}</p>--}}
{{--<p>Assistant: {{ $assignment->assistant }}</p>--}}
{{--<p>Assignment: {{ $assignment->assignment }}</p>--}}
{{--<p>Week: {{ $assignment->week }}</p>--}}

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
</body>
</html>
