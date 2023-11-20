                @if($errors->any())
                <div class="alert-dismiss">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                </div>
                </div>
                @endif