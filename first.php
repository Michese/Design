<?php
echo "<a href='index.php'>Обратно</a><br>";
$arr = [1, 8, 3, 4, 34, 76, 7, 36, 9, 10, 48, 11, 14, 23, 53];

$tree = new BinaryTree();
foreach ($arr as $number) {
    $tree->insert($number);
}

$tree->lnr();

echo "<br>";
$tree->nlr();

echo "<br>";
$tree->lrn();


class BinaryNode
{
    public int $value;
    public int $count = 1;
    public ?BinaryNode $right = null;
    public ?BinaryNode $left = null;

    public function __construct(int $newValue)
    {
        $this->value = $newValue;
    }
}

class BinaryTree
{
    private ?BinaryNode $root = null;

    public function insert(int $number)
    {
        $node = new BinaryNode($number);

        $this->insertNode($node, $this->root);
    }

    public function delete(int $number)
    {
        $node = $this->findNode($number, $this->root);
        if ($node) {
            $this->deleteNode($node);
        } else {
            echo "число {$number} не найдено!";
        }
    }

    public function lnr() {
        if($this->root) {
            $this->lnrNode($this->root);
        }
    }

    public function nlr() {
        if($this->root) {
            $this->nlrNode($this->root);
        }
    }

    public function lrn()
    {
        if($this->root) {
            $this->lrnNode($this->root);
        }
    }

    private function insertNode(BinaryNode $node, ?BinaryNode &$rootNode)
    {
        if ($rootNode === null) {
            $rootNode = $node;
            return $rootNode;
        } else if ($rootNode->value > $node->value) {
            return $this->insertNode($node, $rootNode->left);
        } else if ($rootNode->value < $node->value) {
            return $this->insertNode($node, $rootNode->right);
        } else {
            return $rootNode->count++;
        }
    }

    private function &findNode(int $number, ?BinaryNode &$rootNode): ?BinaryNode
    {
        if ($rootNode == null) {
            return $rootNode;
        } else if ($rootNode->value == $number) {
            return $rootNode;
        } else if ($rootNode->value > $number) {
            return $this->findNode($number, $rootNode->left);
        } else {
            return $this->findNode($number, $rootNode->right);
        }
    }

    private function deleteNode(BinaryNode &$node)
    {
        if ($node->count > 1) {
            $node->count--;
        } else if (is_null($node->left) && is_null($node->right)) {
            unset($node);
        } else if (is_null($node->left)) {
            $node = $node->right;
        } else if (is_null($node->right)) {
            $node = $node->left;
        } else {
            $minNode = $this->findMinNode($node->right);
            $node->value = $minNode->value;
            $this->deleteNode($minNode);
        }

    }

    private function &findMinNode(BinaryNode &$node): BinaryNode
    {
        if (is_null($node->left)) {
            return $node;
        }
        else {
            return $this->findMinNode($node->left);
        }
    }

    private function lnrNode(BinaryNode $node) {
        if (!is_null($node->left)) {
            $this->lnrNode($node->left);
        }

        echo $node->value . " ";

        if(!is_null($node->right)) {
            $this->lnrNode($node->right);
        }
    }

    private function nlrNode(BinaryNode $node) {
        echo $node->value . " ";

        if (!is_null($node->left)) {
            $this->nlrNode($node->left);
        }

        if(!is_null($node->right)) {
            $this->nlrNode($node->right);
        }

    }

    private function lrnNode(BinaryNode $node) {
        if (!is_null($node->left)) {
            $this->lrnNode($node->left);
        }

        if(!is_null($node->right)) {
            $this->lrnNode($node->right);
        }

        echo $node->value . " ";
    }

}