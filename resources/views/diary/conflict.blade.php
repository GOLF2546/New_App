<style>
    table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
        padding: 8px;
        text-align: left;
    }
    th, td {
        padding: 10px;
    }
</style>

<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('My Diary Entries') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                @if ($conflict->isEmpty())
                    <p>No diary entries found.</p>
                @else
                    <table class="w-full text-white">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Content</th>
                                <th>Emotion</th>
                                <th>Intensity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($conflict as $entry)
                                <tr>
                                    <td>{{ $entry->id }}</td>
                                    <td>{{ \Carbon\Carbon::parse($entry->date)->format('Y-m-d') }}</td>
                                    <td>{{ $entry->content }}</td>
                                    <td>{{ $entry->emotion_name }}</td>
                                    <td>{{ $entry->intensity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
</x-app-layout>