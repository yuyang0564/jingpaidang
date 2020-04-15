@component('mail::message')
# 入驻信息提醒

@component('mail::table')
|  用户名               |  手机                   |     QQ       |  类目    |        商城     |    备注      |
| :-------------:      |      :-------------:    |  :--------:  |  :------:   |   :---:          |  :---:      |
| {{$data['username']}}| {{$data['usermobile']}} | {{$data['qq']}} |{{$data['type']}}|  {{$data['select']}} |{{$data['des']}}|
@endcomponent

@endcomponent
