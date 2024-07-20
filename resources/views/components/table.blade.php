<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table table-row-dashed table-striped table-row-gray-300 gs-7 mb-0']) }}>
       {{ $slot }}
    </table>
</div>
