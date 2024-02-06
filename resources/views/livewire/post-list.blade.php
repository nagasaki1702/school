<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div id="filter-selector" class="flex items-center space-x-4 font-light ">
            <button class="text-gray-500 py-4">Latest</button>
            <button class="text-gray-900 py-4 border-b border-gray-700">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        {{-- LaravelのBladeテンプレート内での$thisは、Bladeコンポーネントを指す --}}
        {{-- Bladeコンポーネントでは、$postというプロパティが定義されています。これをBladeテンプレート内で使用する際には、$thisを使ってアクセス --}}
        @foreach ($this->posts as $post)
        {{-- :post="$post" は、変数 $post を子コンポーネントに post という名前のプロパティとして渡すためのBladeの構文 --}}
            <x-posts.post-item :post="$post" />
        @endforeach
    </div>
</div>
