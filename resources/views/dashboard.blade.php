<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- resources/views/assignment.blade.php -->


{{--    @section('content')--}}
        <div class="container">
            <h1>Assignment Tracker</h1>

            <!-- Form to add new entries -->
{{--            <form method="post" action="{{ route('assignments.store') }}">--}}
            <form method="post" >
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="assistant">Assistant:</label>
                <input type="text" id="assistant" name="assistant" required>

                <label for="assignment">Assignment:</label>
                <input type="text" id="assignment" name="assignment" required>

                <input type="submit" value="Add Assignment">
            </form>

            <!-- Table to display assignments -->
            <table class="table">
                <thead>
                <tr>
                    <th>Week</th>
                    <th>Assignment</th>
                    <th>Name</th>
                    <th>Assistant</th>
                    <th>Action</th>
                </tr>
                </thead>
{{--                <tbody>--}}
{{--                @foreach($assignments as $assignment)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $assignment->week }}</td>--}}
{{--                        <td>{{ $assignment->assignment }}</td>--}}
{{--                        <td>{{ $assignment->name }}</td>--}}
{{--                        <td>{{ $assignment->assistant }}</td>--}}
{{--                        <td>--}}
{{--                            <form method="post" action="{{ route('assignments.print', ['id' => $assignment->id]) }}">--}}
{{--                                @csrf--}}
{{--                                <button type="submit">Print</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
            </table>
        </div>
{{--    @endsection--}}

</x-app-layout>
