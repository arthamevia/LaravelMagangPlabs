<x-app-layout title="Users">
    <div class="container">
        <x-card title='Users' subtitle='Table of users'>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Twitter</th>
                </thead>
                <tbody>
                @if (count($users)
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['phone'] }}</td>
                        <td>{{ $user['twitter'] }}</td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="4">
                            <div class='text-center'>
                                Data is currently empty.
                            </div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </x-card>
    </div>
</x-app-layout>