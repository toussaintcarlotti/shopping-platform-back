<x-layouts.app title="Commandes">
    <div class="row g-5">
        <x-card>
            <x-card.header title-bold title="Voir la commande"/>
            <x-card.body>
                <table class="table align-middle table-row-bordered table-row-solid table-hover gy-4 gs-9 mb-0">
                    <tbody>
                    <tr>
                        <th class="text-gray-600">Reference</th>
                        <td class="fw-bold text-end">{{ $order->reference }}</td>
                    </tr>
                    <tr>
                        <th class="text-gray-600">Client</th>
                        <td class="fw-bold text-end">{{ $order->client->last_name }} {{ $order->client->first_name }}</td>
                    </tr>
                    <tr>
                        <th class="text-gray-600">Prix total</th>
                        <td class="fw-bold text-end">{{ Number::currency($order->amount, in: 'EUR', locale:'fr') }}</td>
                    </tr>
                    </tbody>
                </table>
            </x-card.body>
        </x-card>



        <x-card>
            <x-card.header title-bold title="Produits"/>
            <x-card.body>
                <x-alert.classic type="info" class="mb-3">
                    Les produits en rouge ont été supprimés du panier avant le passage de la commande.
                </x-alert.classic>

                <table class="table align-middle table-row-bordered table-row-solid table-hover gy-4 gs-9 mb-0">
                    <thead>
                    <tr class="fw-bolder fs-6 text-gray-800">
                        <th>Produit</th>
                        <th class="text-center">Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr class="align-middle {{ $product->pivot->deleted ? 'table-danger' : '' }}">
                            <td>{{ $product->name }}</td>
                            <td class="text-center">{{ $product->pivot->quantity }}</td>
                            <td>{{ Number::currency($product->price, in: 'EUR', locale:'fr') }}</td>
                            <td>{{ Number::currency($product->price * $product->pivot->quantity, in: 'EUR', locale:'fr') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="my-3">
                    {{ $products->links() }}
                </div>
            </x-card.body>
        </x-card>
    </div>
</x-layouts.app>

