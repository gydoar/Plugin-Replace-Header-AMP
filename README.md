### WordPress Plugin: Replace Header AMP


- [Overview][#Overview]
- [Requirements][#Requirements]
- [Instalation][#Instalation]
- [Plugin directory][#Plugin-directory]

#### Overview

**Images**

![](https://imgur.com/mOjGNqS.png) 

![](https://imgur.com/Vsps6JB.png)

This WordPress Plugin works together with the [AMP plugin](https://es.wordpress.org/plugins/amp/ "AMP plugin") so it is necessary to have it installed for it to work, and it provides an optimal solution to the **AMP Reader mode** with the **AMP Legacy template** adding a responsive logo and menu.

*Note: For the plugin to work, it is necessary that the current template installed in WordPress does not have AMP support.*

#### Requirements

- Last WordPress version
- [AMP Plugin](https://es.wordpress.org/plugins/amp/ "AMP Plugin")
- PHP > 7.2

#### Instalation

- [ ] Install and activate the [AMP plugin](https://es.wordpress.org/plugins/amp/ "AMP plugin") for WordPress.
- [ ] In AMP settings enable **Reader mode** with **AMP Legacy template**.
- [ ] Install the Replace Header AMP plugin.
- [ ] Set the menu location from **Appearance > Menu**, in the WordPress admin.
- [ ] Replace logo from **/public/img/logo.png** directory.


#### Plugin directory

    public/
		header-amp.php
		header-bar.php
		index.php
        img/
            logo.png/
	admin/
	includes/

[#Overview]: #Overview
[#Requirements]: #Requirements "Requirements"
[#Instalation]: #Instalation "Instalation"
[#Plugin-directory]: #Plugin-directory "Plugin directory"