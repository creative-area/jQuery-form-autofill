# jQuery form autofill

jQuery plugin to simply autofill an empty form with data.


## Documentation

<a href="http://labs.creative-area.net/jquery.formautofill/doc/">See complete documentation and demo</a>


## Usage

You have a __form__

```html
<form id="f">
    name <input type="text" name="name">
    email <input type="text" name="email">
    love jQuery
    <input type="radio" name="lovejquery" value="yes"> yes
    <input type="radio" name="lovejquery" value="no"> no
</form>
```

And __data__

```javascript
var data = {
    "name": "John Doe",
    "email": "johndoe@mail.com",
    "lovejquery": "yes"
}
```

__Autofill__ the form with data ? just do

```javascript
$("#f").autofill( data );
```
