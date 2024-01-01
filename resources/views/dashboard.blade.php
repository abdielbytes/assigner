@php
    use Illuminate\Support\Facades\Auth;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


{{--    @section('content')--}}
        <div class="container">
            <h1>Assignment Tracker</h1>

            <!-- Form to add new entries -->
            <form method="post" action="{{ route('assignments.store') }}">
{{--            <form method="post" >--}}
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="assistant">Assistant:</label>
                <input type="text" id="assistant" name="assistant" required>

                <label for="assignment">Assignment:</label>
                <select name="assignment" >
                    <option value="Bible Reading">Bible Reading</option>
                    <option value="Initial call">Initial Call</option>
                    <option value="Return Visit">Return Visit</option>
                    <option value="Bible Study">Bible Study</option>
                    <option value="Talk">Talk</option>

                </select>
                <label for="week">Week:</label>
                <select name="week">
                    @php
                        $loopDate = $now->copy()->subMonths(2);
                    @endphp
                    @for ($i = 0; $i < 20; $i++) {{-- Adjusted to 15 for 3 months past and 12 weeks future --}}
                        <?php
                        $startOfWeek = $loopDate->copy()->startOfWeek();
                        $endOfWeek = $startOfWeek->copy()->endOfWeek();
                        $weekRange = $startOfWeek->format('M d, Y') . ' - ' . $endOfWeek->format('M d, Y');
                        ?>
                    <option value="{{ $weekRange }}">{{ $weekRange }}</option>
                    @php
                        $loopDate->addWeek();
                    @endphp
                    @endfor
                </select>

                {{--                <input type="text" id="assignment" name="assignment" required>--}}

                <input type="submit" class="btn btn-primary value="Add Assignment">

            </form>

            <!-- Table to display assignments -->
            <table class="table">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Assignment</th>
                    <th>Name</th>
                    <th>Assistant</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($assignments as $assignment)
                    <tr>
                        <td>{{ $assignment->week }}</td>
                        <td>{{ $assignment->assignment }}</td>
                        <td>{{ $assignment->name }}</td>
                        <td>{{ $assignment->assistant }}</td>
                        <td>
                            <form method="post" action="{{ route('assignments.print', ['id' => $assignment->id]) }}">
                                @csrf
                                <button type="submit">Print</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
{{--    @endsection--}}

    <style>
        .btn {
            color: #2563eb;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #343a40;
        }

        .assignment-form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #343a40;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .btn-submit {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-print {
            background-color: #28a745;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</x-app-layout>
