<x-app-layout>
    <div class="py-0 w-auto">
        <div class="w-auto mx-auto">
            <div class=overflow-hidden shadow-xl">
                <h1>Esta es la vista de las paginas</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, nihil natus esse doloremque nesciunt
                    autem culpa, id cupiditate quis ex quod ipsam rerum magnam laborum dolore blanditiis. Harum, amet
                    maiores.</p>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                        {{-- <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                    </div>
                                    <div class="col-sm">
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
