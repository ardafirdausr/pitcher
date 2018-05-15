<div class="ui grid home-category centered">            
    <div class="sixteen wide column">
        <h2 class="ui dividing header">Pelajaran Populer</h2>
    </div>
    <div class="sixteen wide column">
        <div class="ui four column grid">                    
            @foreach($results as $result)
            <div class="ui column">
                <div class="ui card">
                    <div class="content">
                        <div class="header">{{ $result->judul }}</div>
                            <div class="meta">
                            <span class="right floated time">{{ $result->tag ?? '' }}</span>
                            <span class="category"> {{ $result->category->name }} </span>
                        </div>
                        <div class="description">   
                            <p>{{ $result->deskripsi }}</p>
                        </div>
                    </div>                
                    <div class="extra content clickable" 
                        onclick=" window.location.href = '{{ route('user.profile.show' , ["id" => $result->user->id ]) }}'"
                        >
                        <div class="left floated author">
                            <img class="ui avatar image" src="{{ asset('uploads/avatar/user.png') }}"> {{ $result->user->name }}
                        </div>
                        <div class="right floated author">
                            Rating 
                        </div>
                    </div>            
                    <div 
                        class="ui bottom attached button">
                        <div class="left floated"><i class="add icon"></i> Add Course</div>                    
                        <div class="right floated">Rp. {{ $result->harga }}</div>
                    </div>
                </div>
            </div>                                               
            @endforeach                            
    </div>
    <div class="four wide column  ">
        <div class="ui grid centered ">
            <div class="two wide column centered">
                {{ $results->links() }}
            </div>
        </div>
    </div>
</div>              
</div>
    
<div class="home-category">            
    <div>
        <h2 class="ui dividing header">Kategori Pelajaran</h2>
    </div>
    <div class="ui stacked segment">
        <div class="ui nine column grid centered">                                          
            @foreach(DB::table('categories')->get() as $category)                                
                <div class="column">
                    <form action="{{ route('search') }}">
                        <input type="hidden" name="kategori" value="{{ $category->id }}">
                        <button class="ui basic button">{{ $category->name }}</button>
                    </form>
                </div>
            @endforeach                                                
        </div>
    </div>              
</div>
