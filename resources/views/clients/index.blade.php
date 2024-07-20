<x-layouts.app title="Clients">
    <x-card>
        <x-card.header title-bold title="Gérer mes clients"/>
        <x-card.body class="p-0">
            <x-table>
                <thead>
                <tr class="fw-bolder fs-6 text-gray-800">
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @forelse($clients as $client)
                    <tr class="align-middle">
                        <td>{{ $client->last_name }}</td>
                        <td>{{ $client->first_name }}</td>
                        <td>{{ $client->email }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center bg-light-warning">
                            {{ __("Aucun client") }}
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </x-table>

            <div class="my-3">
                {{ $clients->links() }}
            </div>
        </x-card.body>
    </x-card>
</x-layouts.app>

