<x-layouts.app title="Commandes">
    <x-card>
        <x-card.header title-bold title="Gérer mes commandes"/>
        <x-card.body class="p-0">
            <x-table>
                <thead>
                <tr class="fw-bolder fs-6 text-gray-800">
                    <th>Reference</th>
                    <th>Client</th>
                    <th>Prix total</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                    <tr class="align-middle">
                        <td>{{ $order->reference }}</td>
                        <td>{{ $order->client->last_name }} {{ $order->client->first_name }}</td>
                        <td>{{ Number::currency($order->amount, in: 'EUR', locale:'fr') }}</td>
                        <td class="text-end">
                            <x-button.link href="{{ route('orders.show', $order) }}" color="primary" light icon="fa fa-eye">
                                Voir
                            </x-button.link>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center bg-light-warning">
                            {{ __("Aucune commande") }}
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </x-table>

            <div class="my-3">
                {{ $orders->links() }}
            </div>
        </x-card.body>
    </x-card>
</x-layouts.app>

