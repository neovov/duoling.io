# duoling.io

How to do [things] in [exotic programming language]

## How to contribute?

If you found something incorrect and you want to fix it:

1. Browse to the page on GitHub (see [website architecture](#website-architecture) to understand how the website is built — don't worry, it is very simple)
2. Click on the “edit” button
3. Write your changes (see [writing guidelines](#writing-guidelines) to makes sure you correctly edit)
4. Write a meaningful commit message
5. Click on “commit changes” and it's done. **Thank you**!

If a page doesn't exists yet and you want to create it:

1. Browse to the folder on GitHub (see [website architecture](#website-architecture) to understand how the website is built — don't worry, it is very simple)
2. Click on the “new file” icon (the one at the end of the path, near the branch selector)
3. Name your file [language].html where [language] is the language you want to “translate” to (see [languages](#languages))
4. Write your file (see [writing guidelines](#writing-guidelines) to makes sure you correctly edit)
5. Write a meaningful commit message
6. Click on “commit new file” and it's done. **Thank you**!

## Website architecture

The `src` folder contains the website's content.  
There is a folder for each [things] to translate (use an URL friendly name like `create-a-class`, not `create a class`).  
In those folders there is an HTML file per language (so `create-a-class/javascript.html` is how to create a class in javascript) and a default `index.html` file.

The list of [things] to translate is located in the `_config.yml` file in the repository's root folder.

## Writing guidelines

The goal of this project is to be **as simple as possible**.  
So, don't bother writing tons of text. Write the **essential** to be **efficient**.  
Don't write outdated code, promote **best practice**.

The files are written in HTML so you can use any tag you want.
The only prerequisite is to have a metadata header (used by the website builder):

```
---
layout: default
---
```

To write a block of highlighted code:

```
{% highlight [language] %}
// Insert your code here
{% endhighlight %}
```

Where `[language]` is the language you are writing (duh!).  
The tool building the website use [pygments](http://pygments.org) to highlight the code so you can use any lexer available.

If you write PHP code, don't forget to add the opening tag, otherwise highlight won't work:

```
{% highlight php %}
$foo = 'bar'; // Not highlighted
{% endhighlight %}

{% highlight php %}
<?php
$foo = 'bar'; // Highlighted
{% endhighlight %}
```

## Languages

The list of languages available is static and can be edited in the `_config.yml` file in the repository's root folder.

We can find the language in three different places in the website:

- In the select menu, directly extracted from the config.
- In the URL, so when adding a language keep in mind to be URL-compliant (`C#` won't work, so you have to use `C-Sharp`)
- In the highlight code (see above)