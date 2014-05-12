reposs - repo size shields
=============
Clean and simple repository size badge, [courtesy of shields.io](https://github.com/badges/shields), that displays the size of your repository in KB, MB or TB.

##Use
In your README.md, just add an image with the base URL (`https://reposs.herokuapp.com/`) with the path to your **public** repository, for example [CocoaPods/Specs](https://github.com/CocoaPods/Specs):

You will then get a nice and pretty SVG with the size of the repository:

```
![](https://reposs.herokuapp.com/?path=CocoaPods/Specs)
```

![](https://reposs.herokuapp.com/?path=CocoaPods/Specs)

If you want a flat image, you can add `&style=flat` after the path.

```
![](https://reposs.herokuapp.com/?path=CocoaPods/Specs&style=flat)
```

![](https://reposs.herokuapp.com/?path=CocoaPods/Specs&style=flat)

That's it!

###Further Customization

If you want to change the color of your badge, just append `&color=COLOR_NAME` to the image URL.  By default, the badge is blue.

Available colors are (repo is rexfinn/shields-sizer):

| Color         | Badge                                                                           |
|:-------------:|:-------------------------------------------------------------------------------:|
| brightgreen   | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=brightgreen&style=flat) |
| green         | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=green&style=flat)       |
| yellowgreen   | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=yellowgreen&style=flat) |
| yellow        | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=yellow&style=flat)      |
| orange        | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=orange&style=flat)      |
| red           | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=red&style=flat)         |
| lightgray     | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=lightgray&style=flat)   |
| blue          | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=blue&style=flat)        |
| ff69b4        | ![](https://reposs.herokuapp.com/?path=rexfinn/reposs&color=ff69b4&style=flat)      |

##To Do
- ~~Add MB/GB options~~ &#x2713;


------

**This repository was created by Rex Finn - but is completely built off of [shields.io](https://github.com/badges/shields) - go check them out!  Having a problem?  [Open an issue.](https://github.com/rexfinn/reposs/issues)**
