# arrayGroups

##使用方式


```nash
php arrayGroup.php [n]
```
n為list長度

e.g.

```bash
php arrayGroup.php 10

Array Length: 10
position:1, value:1
position:2, value:7
position:3, value:8
position:4, value:9
position:5, value:10
position:6, value:2
position:7, value:5
position:8, value:6
position:9, value:4
position:10, value:3

arrayGroup.php:45:
array(3) {
  [0] =>
  array(1) {
    [0] =>
    int(1)
  }
  [1] =>
  array(7) {
    [0] =>
    int(7)
    [1] =>
    int(5)
    [2] =>
    int(10)
    [3] =>
    int(3)
    [4] =>
    int(8)
    [5] =>
    int(6)
    [6] =>
    int(2)
  }
  [2] =>
  array(2) {
    [0] =>
    int(9)
    [1] =>
    int(4)
  }
}


```
