<x-layouts.app title="Produits">
    <x-card>
        <x-card.header title-bold title="Gérer mes produits"/>
        <x-card.body class="p-0">
            <x-table>
                <thead>
                <tr class="fw-bolder fs-6 text-gray-800">
                    <th>Nom</th>
                    <th class="text-center">Quantité</th>
                    <th class="text-center">Prix</th>
                    <th>Couleurs</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr class="align-middle">
                        <td>{{ $product->name }}</td>
                        <td class="text-center">{{ $product->quantity }}</td>
                        <td class="text-center">{{ Number::currency($product->price, in: 'EUR', locale:'fr') }}</td>
                        <td>{{ $product->color }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center bg-light-warning">
                            {{ __("Aucun produit") }}
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </x-table>

            <div class="my-3">
                {{ $products->links() }}
            </div>
        </x-card.body>
    </x-card>
</x-layouts.app>

