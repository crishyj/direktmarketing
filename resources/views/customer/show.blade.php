<p>
    <strong>Name: </strong>  {{$id->name}}
</p>

<p>
    <strong>Email: </strong>  {{$id->email}}
</p>

<p>
    <strong>Phone: </strong>  {{$id->phone}}
</p>

<p>
    <strong>Company: </strong>  {{$id->company}}
</p>

<p>
    <strong>Budget: </strong> $ {{$id->budget}} USD
</p>

<p>
    <strong>Title:</strong> {{$id->title}}  
</p>

<p>
    <strong>Description:</strong> {{$id->target_group_desc}}  
</p>

<p>
    <strong>Category</strong>
</p>
<div>
    <ul>
        <li>
                <strong> E-Mail Marketing: </strong> 
                @php
                    echo ($id-> email_marketing ==1)?"Yes":"No";
                @endphp
        </li>
        <li>
                <strong> Callcenter Action: </strong> 
                @php
                    echo ($id-> callcenter ==1)?"Yes":"No";
                @endphp
            </li>
            <li>
                <strong> Postal Addresses: </strong> 
                @php
                    echo ($id-> postal_Address ==1)?"Yes":"No";
                @endphp
            </li>
    </ul>
</div>


<div>
    <p>
        <strong>Country</strong>
    </p>
    <ul>
        <li>
                <strong> Germany: </strong> 
                @php
                    echo ($id-> germany ==1)?"Yes":"No";
                @endphp
        </li>
        <li>
                <strong> Austria : </strong> 
                @php
                    echo ($id-> austria ==1)?"Yes":"No";
                @endphp
        </li>
           
    </ul>
</div>

<div>
    <p>
        <strong>Supplier</strong>
    </p>
    <ul>
        <li>
                <strong> Company: </strong> 
                @php
                    echo ($id-> supplier_company ==1)?"Yes":"No";
                @endphp
        </li>
        <li>
                <strong> Personal : </strong> 
                @php
                    echo ($id-> austria ==1)?"Yes":"No";
                @endphp
            </li>
            <li>
                <strong> switzerland: </strong> 
                @php
                    echo ($id-> supplier_personal ==1)?"Yes":"No";
                @endphp
            </li>
    </ul>
</div>


<p>
    <strong>Description: </strong> <br>   {{$id->target_group_desc}}
</p>
    

