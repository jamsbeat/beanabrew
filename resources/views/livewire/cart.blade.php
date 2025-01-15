<div>
    <div class="font-sans md:max-w-4xl max-md:max-w-xl mx-auto bg-light-gray py-4">
        <div class="grid md:grid-cols-3 gap-4">
            <div class="md:col-span-2 bg-light-gray p-4 rounded-lg">
                <h2 class="text-3xl font-bold text-warm-brown">Cart</h2>
                <hr class="border-dark-brown mt-4 mb-8" />

                <div class="space-y-4">
                    @foreach($this->items as $item)
                        <div class="grid grid-cols-3 items-center bg-warm-brown p-4 rounded-lg">
                            <div class="col-span-2 flex items-center gap-4">
                                <div class="w-28 h-28 shrink-0 divide-light-gray p-2 rounded-md">
                                    <img src='https://readymadeui.com/images/product14.webp' class="w-full h-full p-2 bg-light-gray rounded-md object-contain" />
                                </div>

                                <div class="">
                                    <div class="inline-flex text-center items-center">
                                        <h3 class="text-base font-bold text-dark-brown"><a href="/product/{{$item->product->id}}">{{ $item->product->name }}</a></h3>
                                        <div class="px-1">•</div>
                                        <p class="text-base text-dark-brown ">{{ $item->variant->size }}</p>
                                    </div>
                                    <div class="">
                                        <button wire:click="deleteItem({{ $item->id }})"
                                                class="text-xs text-light-gray cursor-pointer mt-0.5">Remove
                                        </button>

                                        <div class="flex gap-4 mt-4">
                                            <div class="relative group">
                                                <div></div>
                                            </div>

                                            <div class="flex justify-between">
                                                <button wire:click="decrement({{ $item->id }})" class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                    </svg>
                                                </button>
                                                <div class="px-1">{{$item->quantity}}</div>
                                                <button wire:click="increment({{ $item->id }})"
                                                        class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <h4 class="text-base font-bold text-dark-brown">{{$item->subtotal}}</h4>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            <div class="bg-gray-100 rounded-md p-4 md:sticky top-0">
                @auth
                    <div class="text-gray-800 mt-8 space-y-4">
                        <div class="grid grid-cols-1">
                            <div class="font-medium text-lg">Subtotal</div>
                            <div class="font-medium">   {{$this->cart->total}}</div>
                            <div></div>
                        </div>
                    </div>

                    <div class="mt-8 space-y-2">
                        <button wire:click="checkout" type="button" class="text-sm px-4 py-2.5 w-full font-semibold tracking-wide bg-blue-600 hover:bg-blue-700 text-white rounded-md">Checkout</button>
                    </div>
                @endauth
                @guest
                    <div>
                        <div class="md:col-span-2 bg-gray-100  rounded-md">
                            <h2 class="text-2xl font-bold text-gray-800">Title</h2>
                            <hr class="border-gray-300 mt-4 mb-6" />
                            <div>
                                <div class="text-gray-800 text-sm">
                                    Please <a href="/login" class="text-gray-700">login</a> or <a href="/register" class="text-gray-800">register</a> to checkout.
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
            </div>
        </div>
