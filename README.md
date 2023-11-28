# Add to cart confirmation popup module

`karenrumbie/module-addtocartpopup`

- [Add to cart popup](#module-addtocartpopup)
    - [Main Functionalities](#main-functionalities)
    - [Installation](#installation)
    - [Configuration](#configuration)

## Main Functionalities

Brief description of what module does.

```bash
Add to Cart Popup Confirmation Module
A module which allows you to show a popup confirming the product you added to cart. When a user adds a product to cart from the product listing page or from the product detail page, a popup appear showing the following:
{Product Name} added to cart
Small Product image with a checkmark
Button: Continue Shopping
Button: Checkout
```

## Installation

Add the following to your main composer.json file:

```json
    "repositories": [
        ...
        {
            "type": "vcs",
            "url": "https://github.com/KarenRumbidzai/module-addtocartpopup.git"
        }
    ]
```

Next, install the module via composer as follows:

```bash
$ composer require karenrumbie/module-addtocartpopup:master
$ composer update -vvv
```

After the composer installation has finished, active the module by running the following commands from your Magento 2 root directory:

```bash
$ php bin/magento module:enable KarenRummbie_AddToCartPopup

$ php bin/magento setup:upgrade;
$ php bin/magento di:compile;
```

## Configuration

Configuration needed for module to work.

```bash
Module can be enabled/disabled in admin. It display under Stores > Configuration > KarenRumbie > Add to cart popup
```