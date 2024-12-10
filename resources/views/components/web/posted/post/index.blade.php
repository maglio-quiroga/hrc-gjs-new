<div>
    {{$slot}}
    
    <div class="col" style="width: full">
        
            <div class="row align-items-center">
                @foreach ($posts as $p)
                <div class="col">
                    
                        
                        <div class="card" style="width: 18rem;">
                            <img src="{{'/image/uploads/posts/'. $p->image}}" alt="">
                            <div class="card-body">
                              <h3 class="course_title"><a href="{{ route('web.post.show', $p) }}">{{$p->title}}</a></h3>
                              <div class="course_teacher">{{$p->content}}</div>
                            </div>
                        </div>
                        <br>
                        <br>
                        
                    
                </div>
                @endforeach
            </div>
            {{$posts->links('pagination::bootstrap-4')}} 
    </div>