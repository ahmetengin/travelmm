{{-- <form action="{{url("/EditRegister")}}" method="post">
    @csrf --}}
<div id="booking-forms">
    <div class="modal fade bd-example-modal-lg{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <div class="modal-header">
                <h4 class="modal-title">Аялагчийн мэдээлэл засварлах {{$ids}}</h4>
                    <hr>
                    
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="body">
                    <div class="form bravo-edit-form-register" >
                    <input type="hidden" name="code" value="{{$booking->code}}">
                    <input type="hidden" value="{{$user->id}}" class="form-control"  name="parent_id">
                    <input type="hidden" value="{{$ids}}" class="form-control"  name="id">
                    <div class="form-section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >{{__("Нэр")}}<span class="required">*</span></label>
                                    <input type="text" placeholder="{{__("Аялагчийн нэр")}}" class="form-control" name="first_name" value="{{$item->first_name ?? ''}}" id="first_name">
                                    <span class="invalid-feedback error error-first_name"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >{{__("Овог")}} <span class="required">*</span></label>
                                    <input type="text" placeholder="{{__("Аялагчийн овог")}}" class="form-control" name="last_name" value="{{$item->last_name ?? ''}}" id="last_name">
                                    <span class="invalid-feedback error error-last_name"></span>
                                </div>
                            </div>

                            <div class="col-md-6 field-email">
                                <div class="form-group">
                                    <label >{{__("Цахим шуудан")}} <span class="required">*</span></label>
                                    <input type="email" placeholder="{{__("Цахим шуудан")}}" class="form-control"  name="email" value="{{$item->email ?? ''}}" id="email">
                                    <span class="invalid-feedback error error-email"></span>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >{{__("Утасны дугаар")}} <span class="required">*</span></label>
                                    <input type="text" placeholder="{{__("Утасны дугаар")}}" class="form-control" name="phone" value="{{$item->phone ?? ''}}" id="phone">
                                    <span class="invalid-feedback error error-phone"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >{{__("Яаралтай үед холбогдох утасны дугаар")}} <span class="required">*</span></label>
                                    <input type="text" placeholder="{{__("Яаралтай үед холбогдох утасны дугаар")}}" class="form-control" id="phone2" name="phone2" value="{{$item->phone2 ?? ''}}">
                                </div>
                            </div>
                            <div class="col-md-6 field-address-line-1">
                                <div class="form-group">
                                    <label >{{__("Иргэний үнэмлэх дээрх хаяг")}} </label>
                                    <input type="text" placeholder="{{__("Иргэний үнэмлэх дээрх хаяг")}}" class="form-control"  name="address_line_1" value="{{$item->address_line_1 ?? ''}}" id="address_line_1">
                                </div>
                            </div>
                            <div class="col-md-6 field-address-line-2">
                                <div class="form-group">
                                    <label >{{__("Оршин суугаа хаяг")}} </label>
                                <input type="text" placeholder="{{__("Оршин суугаа хаяг")}}" class="form-control" name="address_line_2" value="{{$item->address_line_2 ?? ''}}" id="address_line_2">
                                </div>
                            </div>
                            {{-- STart Example --}}
                            
                            <div class="col-md-12 field-travel-destination">
                                <div class="form-group">
                                    <label >{{__("Дараагийн сонирхож буй аялал")}} </label>
                                <input type="text" class="form-control"  name="next_travel" placeholder="{{__("Дараагийн сонирхож буй аялал")}}" value="{{$item->next_travel ?? ''}}" id="next_travel">
                                </div>
                            </div>
                        <div class="col-md-6 field-Foreign_FirstName">
                            <div class="form-group"> 
                                <label >{{__("Гадаад паспортын нэр /Англиар/")}} <span class="required">*</span></label>
                                <input type="text" class="form-control" required=""  name="Foreign_FirstName" id="Foreign_FirstName" value="{{$item->Foreign_FirstName ?? ''}}"  placeholder="{{__("Гадаад паспортын нэр /Англиар/")}}">
                                <span class="invalid-feedback error error-Foreign_FirstName"></span>
                            </div>
                        </div>
                        <div class="col-md-6 field-Foreign_LastName">
                            <div class="form-group">
                                <label >{{__("Гадаад паспортын овог /Англиар/")}} <span class="required">*</span> </label>
                                <input type="text" class="form-control"  name="Foreign_LastName" id="Foreign_LastName" value="{{$item->Foreign_LastName ?? ''}}" placeholder="{{__("Гадаад паспортын овог /Англиар/")}}">
                                <span class="invalid-feedback error error-Foreign_LastName"></span>
                            </div>
                        </div>
                        <div class="col-md-6 field-Foreign_Registration">
                            <div class="form-group"> 
                                <label >{{__("Гадаад паспортын дугаар")}} <span class="required">*</span></label>
                                <input type="text" class="form-control" required="" name="Foreign_Registration" id="Foreign_Registration" value="{{$item->Foreign_Registration ?? ''}}" placeholder="{{__("Гадаад паспортын дугаар")}}">
                                <span class="invalid-feedback error error-Foreign_Registration"></span>
                            </div>
                        </div>
                        <div class="col-md-6 field-travel-destination">
                            <div class="form-group">
                                <label >{{__("Регистрийн дугаар")}} <span class="required">*</span> </label>
                                <input type="text" class="form-control"  name="Registration" id="Registration" value="{{$item->Registration ?? ''}}" placeholder="{{__("Регистрийн дугаар")}}">
                                <span class="invalid-feedback error error-Registration"></span>
                            </div>
                        </div>

                        <div class="col-md-6 field-travel-country">
                            <div class="form-group">
                                <label >{{__("Гадаад паспорт олгосон өдөр")}} <span class="required">*</span> </label>
                                <input type="date" class="form-control" name="Foreign_Start_Date" id="Foreign_Start_Date" value="{{$item->Foreign_Start_Date ?? ''}}" placeholder="{{__("Гадаад паспортын олгосон өдөр")}}">
                                <span class="invalid-feedback error error-Foreign_Start_Date"></span>
                            </div>
                        </div>
                        <div class="col-md-6 field-travel-destination">
                            <div class="form-group">
                                <label >{{__("Гадаад паспортын дуусах хугацаа")}} <span class="required">*</span> </label>
                                <input type="date" class="form-control" name="Foreign_End_Date" id="Foreign_End_Date" value="{{$item->Foreign_End_Date ?? ''}}" placeholder="{{__("Гадаад паспортын дуусах хугацаа")}}">
                                <span class="invalid-feedback error error-Foreign_End_Date"></span>
                            </div>
                        </div>


                    
                        </div>
                    </div>

                    <div class="error message-error invalid-feedback"></div>
                    {{-- <div class="form-actions">
                        <button @click="doCheckoutAdd" class="btn btn-warning">Аялагч нэмэх
                            <i class="fa fa-spin fa-spinner" v-show="onSubmit"></i>
                        </button>
                    </div> --}}
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- </form> --}}
