<pre>
<code>

██████╗ ██╗  ██╗██████╗       ██╗  ██╗████████╗███╗   ███╗██╗          ██████╗██╗  ██╗███████╗███████╗
██╔══██╗██║  ██║██╔══██╗      ██║  ██║╚══██╔══╝████╗ ████║██║         ██╔════╝██║  ██║██╔════╝██╔════╝
██████╔╝███████║██████╔╝█████╗███████║   ██║   ██╔████╔██║██║         ██║     ███████║█████╗  █████╗  
██╔═══╝ ██╔══██║██╔═══╝ ╚════╝██╔══██║   ██║   ██║╚██╔╝██║██║         ██║     ██╔══██║██╔══╝  ██╔══╝  
██║     ██║  ██║██║           ██║  ██║   ██║   ██║ ╚═╝ ██║███████╗    ╚██████╗██║  ██║███████╗██║     
╚═╝     ╚═╝  ╚═╝╚═╝           ╚═╝  ╚═╝   ╚═╝   ╚═╝     ╚═╝╚══════╝     ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝     
                                                                                                                                                                                                        
</code>
</pre>

## 🧱 PHP HTML Builder (Proof of Concept)

A lightweight way to build semantic HTML tags in PHP — without crying into your `echo` statements.

### What is this?

A set of simple PHP functions that generate HTML tags with content and attributes. 

###  Why?

Writing raw HTML in PHP can get messy.
This library keeps your markup generation neat, reusable, and clean.


### Growth plans

 The idea is to eventually have this dynamically render content from a database —
for example, something like a CRM or ticket management system.

A ticket gets created, and it’s instantly rendered in the admin dashboard as soon as it’s submitted.



### Example Usage

```php
<?php
echo def_tagContents("p", "Hello world!", array("class" => "intro"));
// Outputs: <p class="intro">Hello world!</p>
