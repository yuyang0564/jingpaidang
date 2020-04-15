@component('mail::message')
# 查询入住率信息

@component('mail::table')
|  公司名               |  手机                   |     品牌       |  
| :-------------:      |      :-------------:    |  :--------:  |  
| {{$data['c']}}       | {{$data['usermobile']}} | {{$data['p']}} |
@endcomponent

@endcomponent
