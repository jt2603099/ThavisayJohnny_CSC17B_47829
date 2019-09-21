/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * File:   main.cpp
 * Author: jt2603099
 *
 * Created on September 19, 2019, 4:21 PM
 */

#include <iostream>
#include <cstdlib>

#include "Dice.h"

using namespace std;

int main(int argc, char** argv) {
    srand(static_cast<unsigned int>(time(0)));
        
    const int rolls = 6;
    Dice **hand = new Dice*[rolls];
    
    for (int i = 0; i < rolls; i++) {
        hand[i] = new Dice(i);
        cout << hand[i]->toHTML();
    }
    
    for (int i = 0; i < rolls; i++) {
        delete hand[i];
    }
    
    delete [] hand;

    return 0;
}

