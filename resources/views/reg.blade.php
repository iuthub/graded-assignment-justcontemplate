<div>
    <h>
        Registration form
    </h>
    <p>
        please fill all fields below
    </p>
    <from method="POST" action="{{route('register')}}">
        {!! csrf_field() !!}
        <ul>
            <li>
                <label>Username</label>
                <input type="text" name="username" placeholder="username">
            </li>
            <li>
                <label>Password</label>
                <input type="text" name="password" placeholder="password">
            </li>
            <li>
                <button type="submit" class="addBtn">Register</button>
            </li>
        </ul>

    </from>
</div>
