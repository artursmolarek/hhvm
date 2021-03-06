<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 *  [traitName::]methodName1 as modifiers methodName2;
 */
class TraitAliasStatement /*implements ITraitAliasStatement*/ {
  use Statement;
  use Node;

  private /*?string*/ $traitName;
  private /*?string*/ $methodName1;
  private /*?Vector<IModifier>*/ $modifiers;
  private /*?string*/ $methodName2;

  /**
   *  [traitName::]methodName1 as modifiers methodName2;
   */
  public function getTraitName() /*: ?string*/ {
    return $this->traitName;
  }
  /**
   *  [traitName::]methodName1 as modifiers methodName2;
   */
  public function setTraitName(/*string*/ $value) /*: this*/ {
    $this->traitName = $value;
    return $this;
  }

  /**
   *  [traitName::]methodName1 as modifiers methodName2;
   */
  public function getMethodName1() /*: string*/ {
    if ($this->methodName1 === null) {
      throw new \Exception("MethodName1 is not initialized");
    }
    return $this->methodName1;
  }
  /**
   *  [traitName::]methodName1 as modifiers methodName2;
   */
  public function setMethodName1(/*string*/ $value) /*: this*/ {
    $this->methodName1 = $value;
    return $this;
  }

  /**
   *  [traitName::]methodName1 as modifiers methodName2;
   */
  public function getModifiers() /*: Vector<IModifier>*/ {
    if ($this->modifiers === null) {
      $this->modifiers = Vector {};
    }
    return $this->modifiers;
  }
  /**
   *  [traitName::]methodName1 as modifiers methodName2;
   */
  public function setModifiers(/*Vector<IModifier>*/ $value)
     /*: this*/ {
    $this->modifiers = $value;
    return $this;
  }

  /**
   *  [traitName::]methodName1 as modifiers methodName2;
   */
  public function getMethodName2() /*: string*/ {
    if ($this->methodName2 === null) {
      throw new \Exception("MethodName2 is not initialized");
    }
    return $this->methodName2;
  }
  /**
   *  [traitName::]methodName1 as modifiers methodName2;
   */
  public function setMethodName2(/*string*/ $value) /*: this*/ {
    $this->methodName2 = $value;
    return $this;
  }

  /**
   * Returns $visitor->visitTraitAliasStatement($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitStatement($this) if
   * such a method exists on $visitor.
   * Otherwise returns $visitor->visitNode($this) if
   */
  public function accept(/*mixed*/ $visitor) /*: mixed*/ {
    if (method_exists($visitor, "visitTraitAliasStatement")) {
      // UNSAFE
      return $visitor->visitTraitAliasStatement($this);
    } else if (method_exists($visitor, "visitStatement")) {
      // UNSAFE
      return $visitor->visitStatement($this);
    } else {
      return $visitor->visitNode($this);
    }
  }

  /**
   * Yields a list of nodes that are children of this node.
   * A node has exactly one parent, so doing a depth
   * first traversal of a node graph using getChildren will
   * traverse a spanning tree.
   */
  public function getChildren() /*: Continuation<INode>*/ {
    if ($this->modifiers !== null) {
      foreach ($this->modifiers as $elem) {
        yield $elem;
      }
    }
  }
}
}
