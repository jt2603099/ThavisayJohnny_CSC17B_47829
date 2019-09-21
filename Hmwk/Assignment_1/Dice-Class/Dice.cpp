/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * File:   Dice.cpp
 * Author: jt2603099
 * 
 * Created on September 19, 2019, 4:33 PM
 */

#include "Dice.h"

#include <string>

using namespace std;

Dice::Dice(int rollNum) {
    
    if (maxRolls <= rollNum) {
        this->rollNum = rollNum;
        setValue();
        setName();
        setPicture();
    } //else {
//        this->rollNum = -1;
//        this->name    = "none";
//        this->picture = "none";
//        this->value   = -1;
//    }
    maxRolls++;
}

void Dice::setName() {
    switch (this->value) {
        case 1: 
            this->name = "diceOne";
            break;
        case 2:
            this->name = "diceTwo";
            break;
        case 3:
            this->name = "diceThree";
            break;
        case 4:
            this->name = "diceFour";
            break;
        case 5:
            this->name = "diceFive";
            break;
        case 6:
            this->name = "diceSix";
            break;
        default:
            this->name = "Error";
            break;
    }
}
void Dice::setPicture() {
    this->picture = "card-icons/" + this->name + ".jpg";
}

void Dice::setValue() {
    this->value = rand() % 6 + 1;
}