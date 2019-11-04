/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package expression_arithmetiques;

/**
 *
 * @author e1903543
 */
public abstract class Operation {
    protected double gauche;
    protected double droite ;
    public Operation( Expression_Arithmetiques gauche , Expression_Arithmetiques droite ){
        this.gauche = gauche;
        this.droite=droite;
                }
    public Operation(Expression_Arithmetiques droite){ this (null, droite);}
    
}
