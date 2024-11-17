<div>
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{route('single_product')}}"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{route('single_product')}}"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{route('single_product')}}"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{route('single_product')}}"><img src="assets/img/products/product-img-4.jpg" alt=""></a>
						</div>
						<h3>Avocado</h3>
						<p class="product-price"><span>Per Kg</span> 50$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{route('single_product')}}"><img src="assets/img/products/product-img-5.jpg" alt=""></a>
						</div>
						<h3>Green Apple</h3>
						<p class="product-price"><span>Per Kg</span> 45$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{route('single_product')}}"><img src="assets/img/products/product-img-6.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 80$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
			<div class="create-button text-center">
                <button data-bs-toggle="modal" data-bs-target="#Create">+Create</button>
            </div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->
	
	<!-- create modal  -->
	<div wire:ignore.self class="modal fade" id="Create" tabindex="-1"
                aria-labelledby="CreateLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg ">
                    <div class="modal-content rounded-4 " >
                        <form wire:submit.prevent="store">
                        <div class="modal-header">
                            <h2 class="modal-title"  id="CreateLabel">Add Product</h2>
                            <button type="button" class="btn-close pt-5" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >
							<div class="row mb-3">
                                    <div class="pt-1 col-sm-6 col-xl-6">
                                        <label class="text-secondary"  for="name">Name:<code>*</code></label>
                                        <input  class="form-control rounded-3 " type="text" wire:model.live="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="pt-1 col-sm-6 col-xl-6">
                                        <label class="text-secondary" for="category">Category:<code>*</code></label>
                                        <input class="form-control rounded-3" type="text" wire:model.live="category">
                                        @error('category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="pt-1 mb-3">
                                    <label class="text-secondary" for="description">Description:</label>
                                    <textarea class="form-control rounded-3" wire:model.live="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="pt-1 col-sm-9 col-xl-6">
                                        <label class="text-secondary" for="cost_price">Cost Price:<code>*</code></label>
                                        <input class="form-control rounded-3 w-100" type="number" wire:model.live="cost_price">
                                        @error('cost_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="pt-1 col-sm-9 col-xl-6">
                                        <label class="text-secondary" for="unit_price">Unit Price:<code>*</code></label>
                                        <input class="form-control rounded-3 w-100" type="number" wire:model.live="unit_price">
                                        @error('unit_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="pt-1 mb-3">
                                    <label class="text-secondary" for="pic_filename">Image:<code>*</code></label>
                                    <input class="form-control rounded-3" type="file" wire:model.live="image"
                                        accept="image/*">
                                    @error('image')
                                        <span class="text-danger" >{{ $message }}</span>
                                    @enderror

                            </div>
                        </div>
                        <div class="modal-footer">
                                <div>
                                    <button style="width: 100px;" type="button" class="btn btn-danger " data-bs-dismiss="modal">
                                        Annuler
                                    </button>
                                </div>
                                <div style="background-color:#F28123">
                                    <button style="width: 100px;" type="submit" class="btn btn-warning"
									wire:loading.class="btn btn-outline-warning" wire:target="store">
                                        <div wire:loading.remove wire:target="store">Create</div>
                                        <div wire:loading wire:target="store">
                                            <span class="spinner-border spinner-border-sm text-warning"
                                                role="status"></span>
                                            <span class="text-warning">Stand by</span>
                                        </div>
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
